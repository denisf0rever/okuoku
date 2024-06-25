import { useEffect, useState } from "react"
import useSound from 'use-sound';
import OpenChatButton from "./components/OpenChatButton";
import Registration from "./modules/Registration/Registration";
import Header from "./modules/Header/Header";
import Chat from "./modules/Chat/Chat";

import newMessageSound from './sounds/newMessage.mp3';
import usePageVisibility from "./hooks/usePageVisibility";

import socket from "./api/socket";

const App = () => {

  const [email, setEmail] = useState('');
  const [name, setName] = useState('');

  const [isChatOpened, setIsChatOpened] = useState(false);
  const [isUserRegistered, setIsUserRegistered] = useState(false);
  const [currentChatId, setCurrentChatId] = useState(0);
  const [userId, setUserId] = useState(0);
  const [messages, setMessages] = useState([]);
  const [isNowWriting, setIsNowWriting] = useState('');


  const [play] = useSound(newMessageSound);
  const isVisible = usePageVisibility();

  useEffect(() => {

    socket.on('getMessages', (messages) => {
      if (messages.length > 0) {
        const lastMessage = messages[messages.length - 1];
        if (lastMessage.role === 'operator' && !isVisible) {
          console.log('visibility check:', isVisible);
          play();
        }
      }
      setMessages(messages);
    });

    socket.on('createChat', (chatInfoJSON) => {
      const chatInfo = JSON.parse(chatInfoJSON);
      console.log('create chat:', chatInfo.chat_id);
      setCurrentChatId(chatInfo.chat_id);
      setUserId(chatInfo.user_id);
    });

    socket.on('setWritingStatus', (JSONmsg) => {
      const msg = JSON.parse(JSONmsg);
      console.log('msg', msg);
      if (msg.is_writing) {
        setIsNowWriting(msg.name);
      }
      else if (!msg.is_writing) {
        setIsNowWriting('');
      }
    });

    return () => {
      socket.off('setWritingStatus');
      socket.off('getMessages');
      socket.off('createChat');
    };
  }, [isVisible, play]);

  const joinChat = () => {
    console.log('creating chat');
    socket.emit('createChat', JSON.stringify({
      email: email,
      name: name,
      expert_id: 1
    }));

    setIsUserRegistered(true);
  }

  const sendMessage = (messageText) => {
    isWriting(false);
    console.log(JSON.stringify({
      chat_id: currentChatId,
      user_id: userId,
      text: messageText,
      name: 'Имя оператора',
      type: 'operator'
    }));

    socket.emit('sendMessage', JSON.stringify({
      chat_id: currentChatId,
      user_id: +userId,
      text: messageText,
      name: 'Имя клиента',
      type: 'client'
    }));
  }

  const isWriting = (isWritingVal) => {
    socket.emit('setWritingStatus', JSON.stringify({
      chat_id: currentChatId,
      name: name,
      is_writing: isWritingVal
    }))
    if (isWritingVal) {
      console.log('is writin emit true')
    }
    else if (!isWritingVal) {
      console.log('is writin emit false')
    }
  }

  return <>
    {isChatOpened
      ?
      <div className="user-chat__wrapper">
        <Header />
        {isUserRegistered
          ? <Chat messages={messages} sendMessage={sendMessage} isWriting={isWriting} isNowWriting={isNowWriting} />
          : <Registration joinChat={joinChat} name={name} email={email} setEmail={setEmail} setName={setName} />}
      </div>
      : null}
    <OpenChatButton setIsChatOpened={setIsChatOpened} isChatOpened={isChatOpened} />
  </>

}

export default App

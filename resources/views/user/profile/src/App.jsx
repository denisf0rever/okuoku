import { useEffect, useState } from "react"
import OpenChatButton from "./components/OpenChatButton";
import io from 'socket.io-client';
import Registration from "./modules/Registration/Registration";
import Header from "./modules/Header/Header";
import Chat from "./modules/Chat/Chat";

function App() {

  const [socket, setsocket] = useState('');

  const [isChatOpened, setIsChatOpened] = useState(false);
  const [isUserRegistered, setIsUserRegistered] = useState(false);
  const [currentChatId, setCurrentChatId] = useState(0);
  const [userId, setUserId] = useState(0);
  const [messages, setMessages] = useState([]);

  useEffect(() => {
    setsocket(io('http://server.okuoku.ru:6001'));
  }, [])

  const joinChat = (email, name) => {
    console.log('creating chat');
    socket.emit('createChat', JSON.stringify({
      email: email,
      name: name,
      expert_id: 1
    }));

    socket.on('createChat', (chatInfoJSON) => {
      console.log('create chat:', chatInfoJSON);
      const chatInfo = JSON.parse(chatInfoJSON)
      setCurrentChatId(chatInfo.chat_id);
      setUserId(chatInfo.user_id)
    })

    socket.off('getMessages');
    setIsUserRegistered(true);
    socket.on('getMessages', (messages) => {

      setMessages(messages);
    });
  }

  const sendMessage = (messageText) => {
    console.log(JSON.stringify({
      chat_id: currentChatId,
      user_id: userId,
      text: messageText,
      name: 'Имя оператора',
      type: 'operator'
    }));
    socket.emit('sendMessage', JSON.stringify({
      chat_id: currentChatId,
      user_id: userId,
      text: messageText,
      name: 'Имя клиента',
      type: 'client'
    }));
  }

  console.log(window.location.pathname);
  console.log(socket);
  return <>
    {isChatOpened
      ?
      <div className="user-chat__wrapper">
        <Header />
        {isUserRegistered
          ? <Chat messages={messages} sendMessage={sendMessage} />
          : <Registration joinChat={joinChat} />}
      </div>
      : null}
    <OpenChatButton setIsChatOpened={setIsChatOpened} isChatOpened={isChatOpened} />
  </>

}

export default App

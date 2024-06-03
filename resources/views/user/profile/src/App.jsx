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
    setIsUserRegistered(true);
  }

  console.log(window.location.pathname);

  return <>
    {isChatOpened
      ?
      <div className="user-chat__wrapper">
        <Header />
        {isUserRegistered
          ? <Chat />
          : <Registration joinChat={joinChat} />}
      </div>
      : null}
    <OpenChatButton setIsChatOpened={setIsChatOpened} isChatOpened={isChatOpened} />
  </>

}

export default App

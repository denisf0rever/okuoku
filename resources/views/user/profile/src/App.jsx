import { useEffect, useState } from "react"
import OpenChatButton from "./components/OpenChatButton";
import io from 'socket.io-client';
import Registration from "./modules/Registration/Registration";

function App() {

  // const [socket, setsocket] = useState('');

  const [isChatOpened, setIsChatOpened] = useState(false);
  const [isUserRegistered, setIsUserRegistered] = useState(false);

  useEffect(() => {
    // setsocket(io('https://chat-test-server.onrender.com'));
  }, [])

  console.log(window.location.pathname);

  return <>
    {isChatOpened
      ?
      <div className="user-chat__wrapper">
        {isUserRegistered
          ? 123
          : <Registration />}
        {/* ? <ActiveChat messages={messages} socket={socket} registrationFormData={registrationFormData} /> */}
        {/* : <RegistrantionForm setIsUserReigistered={setIsUserReigistered} startChat={startChat} setRegistrationFormData={setRegistrationFormData} registrationFormData={registrationFormData} /> */}
      </div>
      : null}
    <OpenChatButton setIsChatOpened={setIsChatOpened} isChatOpened={isChatOpened} />
  </>

}

export default App

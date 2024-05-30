import { useEffect, useState } from "react"
import RegistrantionForm from "./components/RegistrationForm"
import ActiveChat from "./components/ActiveChat";
import axios from "axios";
import io from 'socket.io-client';

function App() {

  const [socket, setsocket] = useState('');


  const [registrationFormData, setRegistrationFormData] = useState({ name: '', email: '' });

  const [isUserReigistered, setIsUserReigistered] = useState(false);

  const [messages, setMessages] = useState([]);


  const startChat = (chatId) => {
    socket.emit('joinChat', chatId);
    socket.on('messages', (messages) => {
      console.log(messages);
      setMessages(messages[0].messages);
    });
  }

  useEffect(() => {
    setsocket(io('https://chat-test-server.onrender.com'));
  }, [])

  console.log(123);

  return <div className="user-chat__wrapper">
    {isUserReigistered
      ? <ActiveChat messages={messages} socket={socket} registrationFormData={registrationFormData} />
      : <RegistrantionForm setIsUserReigistered={setIsUserReigistered} startChat={startChat} setRegistrationFormData={setRegistrationFormData} registrationFormData={registrationFormData} />}
  </div>

}

export default App

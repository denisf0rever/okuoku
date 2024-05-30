import { useState } from "react";
import Message from "./Message";


const ActiveChat = (props) => {

  const [newMessageText, setNewMessageText] = useState('');


  const handleChange = (e) => {
    setNewMessageText(e.target.value);
  }

  const sendMessage = () => {
    props.socket.emit('sendMessage', props.registrationFormData.name, newMessageText, 'User', props.registrationFormData.name);
  }

  return <div className="user-chat__active-chat active-chat">
    <div className="active-chat__wrapper">
      <ul className="active-chat__list">
        {props.messages.map((el, key) => <Message key={key} author={el.author} text={el.text} type={el.type} />)}
      </ul>
      <input type="text" value={newMessageText} onChange={(e) => handleChange(e,)} />
      <button onClick={sendMessage}>Send</button>
    </div>
  </div>
}

export default ActiveChat;
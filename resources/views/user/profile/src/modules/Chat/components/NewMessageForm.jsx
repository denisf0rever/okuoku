import { useState } from "react";


const newMessageForm = (props) => {

  const [msg, setMsg] = useState('');

  const handleKeyPress = (event) => {
    if (event.key === 'Enter') {
      props.sendMessage(msg);
      setMsg('');
    }
  };

  const sendNewMessage = () => {
    props.sendMessage(msg);
    setMsg('');
  }



  return <div className="user-chat__message-input-wrapper">
    <input type="text" value={msg} onChange={(e) => { setMsg(e.target.value) }} onKeyDown={handleKeyPress} className="user-chat__new-message" />
    <img src="" alt="" onClick={sendNewMessage} className="user-chat__send-message" />
  </div>
}

export default newMessageForm;
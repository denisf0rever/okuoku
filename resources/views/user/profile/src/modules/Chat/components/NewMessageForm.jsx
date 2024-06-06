import { useState } from "react";


const newMessageForm = (props) => {

  const [msg, setMsg] = useState('');



  return <div className="user-chat__message-input-wrapper">
    <input type="text" value={msg} onChange={(e) => { setMsg(e.target.value) }} className="user-chat__new-message" />
    <img src="" alt="" onClick={() => props.sendMessage(msg)} className="user-chat__send-message" />
  </div>
}

export default newMessageForm;
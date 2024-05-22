import { useState } from "react";


const chatBottom = (props) => {

  const [newMessageText, setNewMessageText] = useState('');

  const sendMessage = () => {
    props.socket.emit('sendMessage', props.activeChat, newMessageText, 'Operator', 'Operator');
  }

  const handleChange = (e) => {
    setNewMessageText(e.target.value);
  }

  return <div className="active-chat__bottom-form bottom-form">
    <div className="bottom-form__wrapper">
      <img src="../../../images/avatar.jpg" alt="" className="bottom-form__smiles" />
      <img src="../../../images/avatar.jpg" alt="" className="bottom-form__add-file" />
      <input type="text" value={newMessageText} onChange={(e) => handleChange(e,)} className="bottom-form__input" />
      <img src="../../../images/avatar.jpg" alt="" onClick={sendMessage} className="bottom-form__send-button" />
    </div>
  </div>
}

export default chatBottom;
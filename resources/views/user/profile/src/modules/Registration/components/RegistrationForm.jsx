import { useState } from "react";


const RegistrationForm = (props) => {

  const [email, setEmail] = useState('');
  const [name, setName] = useState('');

  return <form className="user-chat-registration__chat-reg-form chat-reg-form">
    <div className="chat-reg-form__wrapper">
      <label className="chat-reg-form__label">Ваш Email</label>
      <input name="email" type="email" value={email} onChange={e => setEmail(e.target.value)} className="chat-reg-form__item" />
      <label className="chat-reg-form__label">Ваше ФИО</label>
      <input name="name" type="text" value={name} onChange={e => setName(e.target.value)} className="chat-reg-form__item" />
    </div>
  </form>
}

export default RegistrationForm;
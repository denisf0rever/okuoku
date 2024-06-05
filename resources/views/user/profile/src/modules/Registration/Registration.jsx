import { useState } from "react";


const Registration = (props) => {
  const [email, setEmail] = useState('');
  const [name, setName] = useState('');
  return <>
    <div className="user-chat__guide">
      <div className="user-chat__guide-text">
        Здравствуйте. Если вам нужна консультация, сформулируйте вопрос в данной форме. Бесплатно не консультирую.
      </div>
    </div>
    <form className="user-chat__chat-reg-form chat-reg-form">
      <div className="chat-reg-form__wrapper">
        <label className="chat-reg-form__label">Ваш Email</label>
        <input name="email" type="email" value={email} onChange={e => setEmail(e.target.value)} className="chat-reg-form__item" />
        <label className="chat-reg-form__label">Ваше имя</label>
        <input name="name" type="text" value={name} onChange={e => setName(e.target.value)} className="chat-reg-form__item" />
      </div>
    </form>
    <div className="user-chat__start-chat-button" onClick={() => props.joinChat(email, name)}>Начать чат</div>
  </>
}

export default Registration;
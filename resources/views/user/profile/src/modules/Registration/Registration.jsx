import RegistrationForm from "./components/RegistrationForm";


const Registration = (props) => {
  return <div className="user-chat__user-chat-registration">
    <div className="user-chat-registration__wrapper">
      <h2 className="user-chat-registration__header">Онлайн чат</h2>
      <div className="user-chat-registration__expert-info">
        <img src="../../images/avatar.jpg" alt="" className="user-chat-registration__expert-img" />
        <div className="user-chat-registration__expert-name">Гудкова Галина Васильевна</div>
        <div className="user-chat-registration__expert-profession">Юрист</div>
      </div>
      <div className="user-chat-registration__guide">
        <div className="user-chat-registration__guide-text">
          Здравствуйте. Если вам нужна консультация, сформулируйте вопрос в данной форме. Бесплатно не консультирую.
        </div>
      </div>
      <RegistrationForm />
      <div className="user-chat-registration__start-chat-button">Начать чат</div>
    </div>
  </div>
}

export default Registration;
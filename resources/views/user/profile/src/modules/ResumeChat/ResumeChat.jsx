

const ResumeChat = (props) => {

  const resumeChat = () => {
    //emit...
    props.setIsUserRegistered(true);
  }

  return <div className="user-chat__choices">
    <div className="user-chat__choice" onClick={() => resumeChat()}>Продолжить чат</div>
    <div className="user-chat__choice" onClick={() => props.setUserCookie(null)}>Новый чат</div>
  </div>
}

export default ResumeChat;
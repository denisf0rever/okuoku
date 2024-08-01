import socket from "../../api/socket";

const ResumeChat = (props) => {

  const resumeChat = () => {

    const currentUrl = window.location.href;

    // Создаем объект URL из текущего URL
    const urlObject = new URL(currentUrl);

    // Получаем путь из URL
    const pathname = urlObject.pathname;

    // Разделяем путь на части
    const pathParts = pathname.split('/');

    // Получаем последний элемент массива, который должен быть номером профиля
    const profileNumber = pathParts.pop();

    console.log(profileNumber); // Выводит номер профиля



    socket.emit('resumeChat', JSON.stringify({
      email: props.userCookie,
      expert_id: profileNumber
    }));
    props.setIsUserRegistered(true);
  }

  return <div className="user-chat__choices">
    <div className="user-chat__choice" onClick={() => resumeChat()}>Продолжить чат</div>
    <div className="user-chat__choice" onClick={() => props.setUserCookie(null)}>Новый чат</div>
  </div>
}

export default ResumeChat;
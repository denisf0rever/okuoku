import { useState } from "react"
import OpenChatButton from "./components/OpenChatButton";
import Registration from "./modules/Registration/Registration";
import Header from "./modules/Header/Header";
import Chat from "./modules/Chat/Chat";


const App = () => {

  const [email, setEmail] = useState('');
  const [name, setName] = useState('');

  const [isChatOpened, setIsChatOpened] = useState(false);
  const [isUserRegistered, setIsUserRegistered] = useState(false);

  // const getCookie = (name) => {
  //   let cookieArr = document.cookie.split(";");
  //   for (let i = 0; i < cookieArr.length; i++) {
  //     let cookiePair = cookieArr[i].split("=");
  //     if (name == cookiePair[0].trim()) {
  //       return decodeURIComponent(cookiePair[1]);
  //     }
  //   }
  //   return null;
  // }

  // // Чтение и парсинг куки
  // let userCookie = getCookie("resumeChatCookie");
  // if (userCookie) {
  //   let userData = JSON.parse(userCookie);
  //   console.log(userData.email);
  //   console.log(userData.expertId);
  // }


  function setChatCookie(mail) {
    fetch('https://okuoku.ru/profile/set-cookie', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Если требуется CSRF токен
      },
      body: JSON.stringify({ email: mail })
    })
      .then(response => response.json())
      .then(data => {
        console.log(data.message); // Обрабатываем ответ от сервера
      })
      .catch(error => {
        console.log(JSON.stringify({ email: mail }));
        console.error('Error:', error);
      });
  }

  // Пример использования:
  setChatCookie('example@example.com');

  return <>
    {isChatOpened
      ?
      <div className="user-chat__wrapper">
        <Header />
        {isUserRegistered
          ? <Chat name={name} email={email} />
          : <Registration name={name} email={email} setEmail={setEmail} setName={setName} setIsUserRegistered={setIsUserRegistered} />}
      </div>
      : null}
    <OpenChatButton setIsChatOpened={setIsChatOpened} isChatOpened={isChatOpened} />
  </>

}

export default App

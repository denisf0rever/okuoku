import { useState, useRef, useEffect } from "react";


const newMessageForm = (props) => {

  const [msg, setMsg] = useState('');

  const handleKeyPress = (event) => {
    if (event.key === 'Enter') {
      props.isWriting(false);
      clearTimeout(timeoutRef.current);
      setTimerActive(false);
      props.sendMessage(msg);
      setMsg('');
    }
  };

  const sendNewMessage = () => {
    props.isWriting(false);
    clearTimeout(timeoutRef.current);
    setTimerActive(false);
    props.sendMessage(msg);
    setMsg('');
  }

  const handleChange = (e) => {

    setMsg(e.target.value)
    setTimerActive(true);
    startTimeout();
  }

  const [timerActive, setTimerActive] = useState(false); // Состояние для активации таймера
  const timeoutRef = useRef(null);

  const startTimeout = () => {
    clearTimeout(timeoutRef.current);
    timeoutRef.current = setTimeout(() => {
      props.isWriting(false);
      setTimerActive(false); // Сброс состояния активации после срабатывания таймера
    }, 1500); // 5 секунд
  };

  useEffect(() => {
    if (timerActive) {
      // console.log('emit start');
      props.isWriting(true);
    }
  }, [timerActive])

  useEffect(() => {
    if (timerActive) {
      startTimeout(); // Запустить таймер при активации
    }

    return () => {
      clearTimeout(timeoutRef.current); // Очистить таймер при размонтировании компонента
    };
  }, [timerActive]);



  return <div className="user-chat__message-input-wrapper">
    <input type="text" value={msg} onChange={(e) => handleChange(e)} onKeyDown={handleKeyPress} className="user-chat__new-message" />
    <img src="" alt="" onClick={sendNewMessage} className="user-chat__send-message" />
  </div>
}

export default newMessageForm;
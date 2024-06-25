import Message from "./components/Message";
import NewMessageForm from "./components/NewMessageForm";
import socket from "../../api/socket";

const Chat = (props) => {


  const isWriting = (isWritingVal) => {
    socket.emit('setWritingStatus', JSON.stringify({
      chat_id: props.currentChatId,
      name: props.name,
      is_writing: isWritingVal
    }))
    if (isWritingVal) {
      console.log('is writin emit true')
    }
    else if (!isWritingVal) {
      console.log('is writin emit false')
    }
  }

  return <>
    <div className="user-chat__chat-list chat-list">
      <div className="chat-list__wrapper">
        <ul className="chat-list__list">
          {
            props.messages.length > 0
              ?
              props.messages.map((el, key) => <Message key={key} message={{ text: el.text, role: el.role, created_at: el.created_at, isRead: el.is_read }} />)
              : ''
          }
        </ul>
        {props.isNowWriting === ''
          ? <div className="chat-list__now-writing"></div>
          : <div className="chat-list__now-writing">{props.isNowWriting} печатает...</div>}
      </div>
    </div>
    <NewMessageForm sendMessage={props.sendMessage} isWriting={isWriting} />
  </>

}

export default Chat;
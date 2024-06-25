import Message from "./components/Message";
import NewMessageForm from "./components/NewMessageForm";

const Chat = (props) => {

  console.log(props);

  return <>
    <div className="user-chat__chat-list chat-list">
      <ul className="chat-list__wrapper">
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
    <NewMessageForm sendMessage={props.sendMessage} isWriting={props.isWriting} />
  </>

}

export default Chat;
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
            props.messages.map((el, key) => <Message key={key} message={{ text: el.text, role: el.role, created_at: el.created_at }} />)
            : ''
        }
      </ul>
    </div>
    <NewMessageForm sendMessage={props.sendMessage} />
  </>

}

export default Chat;
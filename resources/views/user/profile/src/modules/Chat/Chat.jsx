import Message from "./components/Message";
import NewMessageForm from "./components/NewMessageForm";

const Chat = (props) => {

  return <>
    <div className="user-chat__chat-list chat-list">
      <ul className="chat-list__wrapper">
        <Message message={{ text: '123', role: 1, created_at: '123131313' }} />
        <Message message={{ text: '123', role: 0, created_at: '123131313' }} />
        <Message message={{ text: '1233131', role: 1, created_at: '123131313' }} />
        <Message message={{ text: '12g3g3', role: 0, created_at: '123131313' }} />
        <Message message={{ text: '123', role: 1, created_at: '123131313' }} />
        <Message message={{ text: '123', role: 0, created_at: '123131313' }} />
        <Message message={{ text: '1233131', role: 1, created_at: '123131313' }} />
        <Message message={{ text: '12g3g3', role: 0, created_at: '123131313' }} />
        <Message message={{ text: '123', role: 1, created_at: '123131313' }} />
        <Message message={{ text: '123', role: 0, created_at: '123131313' }} />
        <Message message={{ text: '1233131', role: 1, created_at: '123131313' }} />
        <Message message={{ text: '12g3g3', role: 0, created_at: '123131313' }} />
        <Message message={{ text: '123', role: 1, created_at: '123131313' }} />
        <Message message={{ text: '123', role: 0, created_at: '123131313' }} />
        <Message message={{ text: '1233131', role: 1, created_at: '123131313' }} />
        <Message message={{ text: '12g3g3', role: 0, created_at: '123131313' }} />
      </ul>
    </div>
    <NewMessageForm />
  </>

}

export default Chat;
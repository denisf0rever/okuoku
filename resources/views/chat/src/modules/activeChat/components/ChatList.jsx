import Message from './Message';

const ChatList = (props) => {
  return <div className="active-chat__list chat-list">
    <div className="chat-list__wrapper">
      <ul className="chat-list__list">
        {props.activeChatMessages.map((el, key) => <Message key={key} author={el.author} text={el.text} type={el.type} />)}
      </ul>
    </div>
  </div>
}

export default ChatList;
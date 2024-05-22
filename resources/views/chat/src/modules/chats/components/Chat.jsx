

const Chat = (props) => {

  const chooseChat = () => {
    props.setNewChat(props.user);
  }

  return <li className="chats-list__item chat-item" onClick={chooseChat}>
    <div className="chat-item__wrapper">
      <div className="chat-item__user">{props.user}</div>
      <div className="chat-item__last-message">{props.lastMessage}</div>
    </div>
  </li>
}

export default Chat;
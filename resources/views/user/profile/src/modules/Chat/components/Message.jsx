

const Message = (props) => {
  const formattedTime = props.message.created_at.split(' ')[1].split(':').slice(0, 2).join(':');
  // const formattedTime = '12313';
  const messageTypeClass = (props.message.role === 'operator')
    ? 'chat-list__message chat-list__operator'
    : 'chat-list__message chat-list__user';

  return <li className={messageTypeClass}>
    <div className="chat-list__message-text">{props.message.text}</div>
    <div className="chat-list__time">{formattedTime}</div>
    <div className="chat-list__is-read">{props.message.isRead}</div>

  </li>
}

export default Message;
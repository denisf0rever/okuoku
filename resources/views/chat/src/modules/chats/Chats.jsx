import Chat from "./components/Chat";
import Filter from "./components/Filter";


const Chats = (props) => {

  return <div className="operator-chat__chats-wrapper chats-list">
    <Filter />
    <ul className="chats-list__list">
      {props.chats.map((el, key) => <Chat key={key} user={el.userName} lastMessage={el.lastMessage} socket={props.socket}
        setNewChat={props.setNewChat} />)}
    </ul>
  </div>
}

export default Chats;
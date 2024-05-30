import { useState } from "react";


const RegistrantionForm = (props) => {

  // const [registrationFormData, setRegistrationFormData] = useState({ name: '', email: '' });

  const handleChange = (event, type) => {
    if (type === 'name') props.setRegistrationFormData({ name: event.target.value, email: props.registrationFormData.email })
    else if (type === 'email') props.setRegistrationFormData({ name: props.registrationFormData.name, email: event.target.value })
  }

  const submitFunction = () => {
    props.setIsUserReigistered(true);
    props.startChat(props.registrationFormData.name);
  }

  return <div className="user-chat__registrarion">
    <form action="" className="user-chat__registrarion-form registrarion-form">
      <input className="registrarion-form__name" type="text" name="name" placeholder="Имя" value={props.registrationFormData.name} onChange={(e) => handleChange(e, 'name')} />
      <input className="registrarion-form__email" type="email" name="email" placeholder="Почта" value={props.registrationFormData.email} onChange={(e) => handleChange(e, 'email')} />
      <div className="registrarion-form__submit" onClick={submitFunction}>Отправить</div>
    </form>
  </div>
}

export default RegistrantionForm;
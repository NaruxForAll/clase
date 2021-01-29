require('./bootstrap');



document
.getElementById('send')
.addEventListener("click", function() {

  console.log('hola');
  const form = document.getElementById('form');
  const data = new FormData(form);
  const url = form.action;

  const sendPostRequest = async() => {
    try {
      const resp = await axios.post(url, data);
    } catch (err) {

    }
  }

  sendPostRequest();
});
console.log('ON robotsJS');
document.getElementById('robotsJST').innerHTML = `<span id="robotsJStext"></span>
<button style="background-color: #0000;border: none;cursor: pointer;" onclick="cngfbtxt()">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
    <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
  </svg>
</button><br>
<input style="height: 20px;width: 110px;" id="outputRobotsText" type="text">`;
const rbcalculator = document.getElementById('robotsJStext');
const outpouvaluecal = document.getElementById('outputRobotsText');
// Add custom font
const style = document.createElement('style');
style.innerHTML = `
  @font-face {
    font-family: 'robotsjsfont';
    src: url('/robotsJST/robot.ttf');
    font-weight: normal;
    font-style: normal;
  }
  /* Prevent text selection and copying */
  #robotsJStext {
    user-select: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
  }
`;
document.head.appendChild(style);
// Style The Robots Js
rbcalculator.style.fontFamily = 'robotsjsfont';
rbcalculator.style.color = '#000';
rbcalculator.style.padding = '7px';
rbcalculator.style.backgroundColor = '#e4e4e4';
rbcalculator.style.cursor = 'none';
function myrobotstxt() {
  const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  let result = '';
  for (let i = 0; i < 7; i++) {
    result += characters.charAt(Math.floor(Math.random() * characters.length));
  }
  sessionStorage.setItem('robotstxt', result);
}
myrobotstxt();
function settimeoutsystem() {
  const loadrobotsdata = sessionStorage.getItem('robotstxt');
  rbcalculator.innerHTML = `<i><s>${loadrobotsdata}</s></i>`;
  return loadrobotsdata;
}
function mainthecheckip() {
  setTimeout(settimeoutsystem, 500);
}
mainthecheckip();
function cngfbtxt() {
  myrobotstxt();
  mainthecheckip();
}



function apirobotsJS(apidata) {
  const callurl = apidata.call;
  const callmethod = apidata.method;
  const callid = document.getElementById(apidata.id); 

  if (settimeoutsystem() === outpouvaluecal.value) {
    callid.action = callurl;
    callid.method = callmethod;
    callid.submit();
  } else {
    alert('No fill the RobotsJST !');
  }
}


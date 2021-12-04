/*jshint esversion:6 */

const SIGN_IN_BTN = document.querySelector('#sign-in-btn');
const ASK_PASSWORD = document.querySelector('#ask-password');

const ASK_INFO_BTN = document.querySelector('#ask-info-btn');
const container = document.querySelector('.container');


ASK_PASSWORD.addEventListener('click', () => {
    container.classList.add('ask-info-mode');});

ASK_INFO_BTN.addEventListener('click', () => {
    container.classList.add('ask-info-mode');});

SIGN_IN_BTN.addEventListener('click', () => {
    container.classList.remove('ask-info-mode');});


// $('#forgot-password').click(function(){
//   container.classList.add('ask-info-mode');
// });

// keyCode appears in developer console.
window.addEventListener('keydown', playSample);

function removeTransition(e) {
  if(e.propertyName !== 'transform'){return;}
  this.classList.remove('playing');
  console.log(e);

}

function playSample(e){
  const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
  const key = document.querySelector(`.key[data-key="${e.keyCode}"]`);
  // in case of no audio, break.
  if(!audio){return;}
  // reset sample.
  audio.currentTime = 0;
  // play sample.
  audio.play();
  key.classList.add('playing');
}





const keys = document.querySelectorAll('.key');
// array.forEach is about 95% slower than for().
for (var i = 0, len = keys.length; i < len; i++) {
  keys[i].addEventListener('transitionend', removeTransition);
}

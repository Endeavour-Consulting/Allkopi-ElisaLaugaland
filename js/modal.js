function openModal(modalId) {
  const wrap = document.querySelector('#wrap');
  const modal = document.querySelector(`#${modalId}`);
  const iframe = document.querySelector(`#${modalId} iframe`);

  if (iframe) {

    const dataSrc = iframe.getAttribute('data-src');

    if (dataSrc != null && dataSrc != '') {
      iframe.setAttribute('src', dataSrc);
    }
  }

  wrap.classList.add('move-out');
  modal.classList.add('opened');
}

function closeModal(modalId) {
  const wrap = document.querySelector('#wrap');
  const modal = document.querySelector(`#${modalId}`);

  wrap.classList.remove('move-out');
  modal.classList.remove('opened');
}

//facebook shared
function fbs_click() {
  var img = document.getElementById('mama')
  u=img.src;
  t=img.getAttribute('alt');
  window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t)+'&appId=379533749476328','sharer','toolbar=0,status=0,width=626,height=436');return false;
}
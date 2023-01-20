function getScrollBarWidth() {
  let div = document.createElement('div');
  div.style.overflowY = 'scroll';
  div.style.width = '50px';
  div.style.height = '50px';
  document.body.append(div);
  let scrollWidth = div.offsetWidth - div.clientWidth;
  div.remove();
  return scrollWidth;
}

export function bodyHidden() {
  const body = document.querySelector('body');
  body.style.overflow = 'hidden';
  body.style.width = '100vw';
  body.style.paddingRight = getScrollBarWidth() + 'px';
}

export function bodyVisible() {
  const body = document.querySelector('body');
  body.style.overflow = 'initial';
  body.style.width = 'auto';
  body.style.paddingRight = '0';
}

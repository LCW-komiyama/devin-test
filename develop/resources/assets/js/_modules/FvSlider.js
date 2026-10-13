// ------------------------------------------
// FVスライダー（フェード切替・自動再生・前後ボタン・ドット連動）
// ------------------------------------------
class FvSlider {
  constructor(el, opt){
    this.el = document.querySelector('.' + el);
    if(!this.el) return;
    this.slides = this.el.querySelectorAll('.p-top-fv__slide');
    this.dots = document.querySelectorAll('.js-fvDots li');
    this.index = 0;
    this.interval = 5000;
    this.timer = null;
    if(this.slides.length <= 1) return;
    this.event();
    this.start();
  }
  event(){
    const prev = this.el.querySelector('.p-top-fv__arrow--prev');
    const next = this.el.querySelector('.p-top-fv__arrow--next');
    if(prev){
      prev.addEventListener('click', () => {
        this.move(-1);
        this.restart();
      });
    }
    if(next){
      next.addEventListener('click', () => {
        this.move(1);
        this.restart();
      });
    }
  }
  move(dir){
    this.slides[this.index].classList.remove('is-active');
    if(this.dots[this.index]) this.dots[this.index].classList.remove('is-active');
    this.index = (this.index + dir + this.slides.length) % this.slides.length;
    this.slides[this.index].classList.add('is-active');
    if(this.dots[this.index]) this.dots[this.index].classList.add('is-active');
  }
  start(){
    this.timer = setInterval(() => {
      this.move(1);
    }, this.interval);
  }
  restart(){
    clearInterval(this.timer);
    this.start();
  }
}

// ------------------------------------------
// メンバー写真の無限ループ（右から左へ流れ続けるマーキー）
// 画面幅に応じて要素を自動複製するため、どの幅でもシームレスに繋がる
// ------------------------------------------
class MemberMarquee {
  constructor(el, opt){
    this.el = document.querySelector('.' + el);
    if(!this.el) return;
    this.track = this.el.querySelector('.p-top-member__track');
    if(!this.track) return;
    this.speed = 60;
    this.x = 0;
    this.last = performance.now();
    this.setup();
    let timer;
    window.addEventListener('resize', () => {
      clearTimeout(timer);
      timer = setTimeout(() => {
        this.setup();
      }, 200);
    });
    requestAnimationFrame((now) => {
      this.tick(now);
    });
  }
  setup(){
    this.track.querySelectorAll('.is-clone').forEach((node) => {
      node.remove();
    });
    const items = Array.from(this.track.children);
    this.unitWidth = 0;
    items.forEach((node) => {
      this.unitWidth += node.offsetWidth;
    });
    if(this.unitWidth <= 0) return;
    let total = this.unitWidth;
    const need = this.el.offsetWidth + this.unitWidth;
    while(total < need){
      items.forEach((node) => {
        const clone = node.cloneNode(true);
        clone.classList.add('is-clone');
        this.track.appendChild(clone);
      });
      total += this.unitWidth;
    }
  }
  tick(now){
    const dt = (now - this.last) / 1000;
    this.last = now;
    if(this.unitWidth > 0){
      this.x -= this.speed * dt;
      if(this.x <= -this.unitWidth){
        this.x += this.unitWidth;
      }
      this.track.style.transform = 'translateX(' + this.x + 'px)';
    }
    requestAnimationFrame((next) => {
      this.tick(next);
    });
  }
}

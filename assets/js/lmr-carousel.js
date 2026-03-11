
document.addEventListener('DOMContentLoaded', function(){
  document.querySelectorAll('.lmr-cats-carousel ul.products').forEach(function(el){
    let isDown=false,startX,scrollLeft;
    el.addEventListener('mousedown',e=>{isDown=true;startX=e.pageX - el.offsetLeft;scrollLeft=el.scrollLeft;});
    el.addEventListener('mouseleave',()=>isDown=false);
    el.addEventListener('mouseup',()=>isDown=false);
    el.addEventListener('mousemove',e=>{if(!isDown) return; e.preventDefault(); const x=e.pageX - el.offsetLeft; const walk=(x-startX)*1; el.scrollLeft = scrollLeft - walk;});
    let touchStartX=0;
    el.addEventListener('touchstart',e=>{touchStartX=e.touches[0].pageX;}, {passive:true});
    el.addEventListener('touchmove',e=>{const dx=e.touches[0].pageX - touchStartX; el.scrollLeft -= dx; touchStartX=e.touches[0].pageX;}, {passive:true});
  });
});

(function(){
  function setConsent(value){
    try{ localStorage.setItem('fitz_cookie_consent', value ? 'accepted' : 'declined'); }catch(e){}
    try{ document.cookie = 'fitz_cookie_consent='+(value?'accepted':'declined')+';path=/;max-age='+(60*60*24*180); }catch(e){}
  }
  function show(){ var el=document.getElementById('fitz-cookie-banner'); if(el) el.style.display='block'; }
  function hide(){ var el=document.getElementById('fitz-cookie-banner'); if(el) el.style.display='none'; }
  document.addEventListener('DOMContentLoaded', function(){
    show();
    var root = document.getElementById('fitz-cookie-banner');
    if(!root) return;
    var accept = root.querySelector('.btn-accept');
    var decline = root.querySelector('.btn-decline');
    if(accept){ accept.addEventListener('click', function(){ setConsent(true); hide(); }); }
    if(decline){ decline.addEventListener('click', function(){ setConsent(false); hide(); }); }
  });
})();



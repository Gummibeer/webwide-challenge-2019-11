module.exports = function () {
    for(var z='';!(/[a-z]/.test(z)&&/[A-Z]/.test(z)&&/[\d]/.test(z)&&/[!#$%&()*+,\-.\/:;<=>? @\[\]^_{|}~]/.test(z));)z=[...Array(95)].map((t,a)=>String.fromCharCode(32+a)).map((t,a,e)=>e[Math.floor(Math.random()*e.length)]).slice(0,16).join('')
    return z
};
/**
 * @author kylejrp
 * @link https://webwide.io/threads/programming-code-golf-password-generator.507/post-3494
 */

module.exports = function () {
    var z='x'
    while(!(z.match(/[a-z]/)&&z.match(/[A-Z]/)&&z.match(/\d/)&&z.match(/\W/)))
        z=[...Array(95)].map((_,i)=>String.fromCharCode(32+i)).map((_,__,a)=>a[Math.floor((Math.random()*a.length))]).slice(0,16).join('')
    return z
};

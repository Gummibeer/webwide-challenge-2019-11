require('should');
const mocha = require('mocha');
const describe = mocha.describe;
const it = mocha.it;

const kylejrp = require('../src/kylejrp');
const gummibeer = require('../src/gummibeer');

const test = function(user) {
    [...Array(10000)].forEach((_, i) => {
        it(i + ') will generate valid password', function () {
            const password = user();

            password.should.be.a.String().and.have.length(16);
            /[a-z]/.test(password).should.be.true(password + ' should contain [a-z]');
            /[A-Z]/.test(password).should.be.true(password + ' should contain [A-Z]]');
            /[0-9]/.test(password).should.be.true(password + ' should contain [0-9]');
            /[!#$%&()*+,\-.\/:;<=>? @\[\]^_{|}~]/.test(password).should.be.true(password + ' should contain [!#$%&()*+,-./:;<=>? @[]^_{|}~]');
        });
    });
};

describe('kylejrp', function () {
    test(kylejrp);
});

describe('gummibeer', function () {
    test(gummibeer);
});
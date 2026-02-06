<?php

test('environment check', function () {
    dump(config('app.env'));
    dump(config('database.default'));
    dump(config('session.driver'));
});

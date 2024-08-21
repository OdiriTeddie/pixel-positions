<?php

use App\Models\Employer;
use App\Models\Job;

test('it belongs to an employer', function () {
    // AAA -  Arrange -> Act -> Assert

    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act and Assert
    expect($job->employer->is($employer))->toBeTrue();

});


it('can have tags', function () {
    // ARRRANGE
    $job = Job::factory()->create();

    // ACT
    $job->tag('Frontend');

    // ASSERT
    expect($job->tags)->toHaveCount(1);
});
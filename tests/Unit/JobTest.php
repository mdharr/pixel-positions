<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // Arrange, Act, Assert (AAA) is a three-step process for testing

    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act
    expect($job->employer->is($employer))->toBeTrue();

    // Assert (in this case we Act and Assert on the same line above

});

it('can have tags', function () {
   $job = Job::factory()->create();

   $job->tag('Frontend');

   expect($job->tags)->toHaveCount(1);
});

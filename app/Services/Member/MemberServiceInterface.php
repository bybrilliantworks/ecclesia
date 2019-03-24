<?php

namespace App\Services\Member;

use App\Member;

interface MemberServiceInterface
{
    public function fetchAll();

    public function getMember(int $id): Member;

    public function createMember(array $member): Member;

    public function updateMember(array $member, int $id): bool;
}

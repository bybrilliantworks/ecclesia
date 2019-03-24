<?php
/**
 * Created by PhpStorm.
 * User: jidesakin
 * Date: 4/25/16
 * Time: 6:27 AM
 */

namespace App\Repositories\Member;

use App\Member;
use App\Repositories\Member\MemberRepositoryInterface;

class MemberRepository implements MemberRepositoryInterface
{
    private $member;

    public function __construct(Member $member)
    {
        $this->member = $member;
    }

    public function fetchAll()
    {
        return $this->member->all();
    }

    public function createMember(array $member)
    {
        return $this->member->createMember($member);
    }

    public function getMember(int $id)
    {
        return $this->member->find($id);
    }

    public function updateMember(array $data, int $id): bool
    {
        $member = $this->member->find($id);

        if ($member) {
            return $member->update($data);
        }

        return false;
    }

}

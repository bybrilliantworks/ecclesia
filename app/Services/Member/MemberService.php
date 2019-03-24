<?php

namespace App\Services\Member;

use App\Member;
use App\Repositories\Member\MemberRepositoryInterface as MemberRepository;
use App\Services\Member\MemberServiceInterface;

class MemberService implements MemberServiceInterface
{
    private $memberRepository;

    public function __construct(MemberRepository $memberRepository)
    {
        $this->memberRepository = $memberRepository;
    }

    public function fetchAll()
    {
        return $this->memberRepository->fetchAll();
    }

    public function getMember(int $id): Member
    {
        return $this->memberRepository->getMember($id);
    }

    public function createMember(array $memberData): Member
    {
        $member = $this->buildMember($memberData);

        return $this->memberRepository->createMember($member);
    }

    public function updateMember(array $memberData, int $id): bool
    {
        $member = $this->buildMember($memberData);

        return $this->memberRepository->updateMember($member, $id);
    }

    private function buildMember(array $member): array
    {
        return [
            'first_name' => $member['firstName'],
            'last_name' => $member['lastName'],
            'email' => $member['email'],
            'address' => $member['address'],
            'birthday' => $member['birthday'],
            'marital_status' => $member['maritalStatus'],
            'church_id' => auth()->user()->church_id,
            'date_joined' => $member['dateJoined'],
            'mobile_number' => $member['mobileNumber'],
            'occupation' => $member['occupation'],
            'gender' => $member['gender'],
            'certified_code' => $member['certifiedCode'],
        ];
    }
}

<?php
// 길이변환

namespace Jiny\Convert\Length;

class Jung {
    private $value;

    /**
     * 객체 타입 상수지정
     */
    const TYPE="Jung";

    public function type() {
        return self::TYPE;
    }

    /**
     * 싱글턴
     */
    private static $Instance;
    public static function instance() {
        if (!isset(self::$Instance)) {
            self::$Instance = new self();
        }
        return self::$Instance;
    }
    
    /**
     * 초기화
     */
    public function __construct($value=null) {
        if ($value) {
            $this->value = $value;
        }
    }

    public function __invoke() {
        return $this->value; 
    }

    /**
     * 값 지정
     */
    public function setValue($value) {
        $this->value = $value;
    }

    /**
     * 값 출력
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * 센티미터(centimeter) 변환
     */
    public function centi($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 10909.0909;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 10909.0909;
        }
        // 계산불가
        return null;
    }

    /**
     * 미터(meter) 변환
     */
    public function meter($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 109.090909;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 109.090909;
        }
        // 계산불가
        return null;
    }

    /**
     * 인치(inch) 변환
     */
    public function inch($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 4294.91768;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 4294.91768;
        }
        // 계산불가
        return null;
    }
    
    /**
     * 간(gan) 변환
     */
    public function gan($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 60;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 60;
        }
        // 계산불가
        return null;
    }

    /**
     * 피트(feet) 변환
     */
    public function feet($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 357.909807;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 357.909807;
        }
        // 계산불가
        return null;
    }

    /**
     * 푸트(foot) 변환
     */
    public function foot($value=null) {
        if ($value) {
            // 입력한 값 기준으로 계산
            return $value * 357.909807;
        } else if($this->value) {
            // 설정 프로퍼티 기준으로 계산
            return $this->value * 357.909807;
        }
        // 계산불가
        return null;
    }

    /**
     * end of class
     */
}
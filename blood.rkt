;; The first three lines of this file were inserted by DrRacket. They record metadata
;; about the language level of this file in a form that our tools can easily process.
#reader(lib "htdp-beginner-reader.ss" "lang")((modname blood) (read-case-sensitive #t) (teachpacks ()) (htdp-settings #(#t constructor repeating-decimal #f #t none #f () #t)))

;; (can-donate-to/cond? donor recipient) Produces the result of the acceptablity for
;;   blood donation.
;; can-donate-to/cond?: Sym Sym -> Bool
;; Requires:
;;   Donor or recipient = O- O+ A- A+ B- B+ AB+ AB-
;; Examples:
(check-expect (can-donate-to/cond? 'O- 'AB+) true)
(check-expect (can-donate-to/cond? 'AB+ 'B-) false)

(define (can-donate-to/cond? donor recipient)
  (cond
    ((symbol=? donor 'O-)
     (cond
       ((symbol=? recipient 'O-) true)
       ((symbol=? recipient 'O+) true)
       ((symbol=? recipient 'A+) true)
       ((symbol=? recipient 'A-) true)
       ((symbol=? recipient 'B+) true)
       ((symbol=? recipient 'B-) true)
       ((symbol=? recipient 'AB+) true)
       ((symbol=? recipient 'AB-) true)
       (else false)))
    ((symbol=? donor 'O+)
     (cond
       ((symbol=? recipient 'O+) true)
       ((symbol=? recipient 'A+) true)
       ((symbol=? recipient 'B+) true)
       ((symbol=? recipient 'AB+) true)
       (else false)))
    ((symbol=? donor 'A-)
     (cond
       ((symbol=? recipient 'A+) true)
       ((symbol=? recipient 'A-) true)
       ((symbol=? recipient 'AB+) true)
       ((symbol=? recipient 'AB-) true)
       (else false)))
    ((symbol=? donor 'A+)
     (cond
       ((symbol=? recipient 'A+) true)
       ((symbol=? recipient 'AB+) true)
       (else false)))
    ((symbol=? donor 'B-)
     (cond
       ((symbol=? recipient 'B+) true)
       ((symbol=? recipient 'B-) true)
       ((symbol=? recipient 'AB+) true)
       ((symbol=? recipient 'AB-) true)
       (else false)))
    ((symbol=? donor 'B+)
     (cond
       ((symbol=? recipient 'B+) true)
       ((symbol=? recipient 'AB+) true)
       (else false)))
    ((symbol=? donor 'AB-)
     (cond
       ((symbol=? recipient 'AB+) true)
       ((symbol=? recipient 'AB-) true)
       (else false)))
     ((symbol=? donor 'AB+)
     (cond
       ((symbol=? recipient 'AB+) true)
       (else false)))))
;; Tests
(check-expect (can-donate-to/cond? 'AB+ 'B+) false)
(check-expect (can-donate-to/cond? 'AB- 'B-) false)
(check-expect (can-donate-to/cond? 'AB- 'AB-) true)
(check-expect (can-donate-to/cond? 'B+ 'B-) false)
(check-expect (can-donate-to/cond? 'A+ 'AB+) true)
(check-expect (can-donate-to/cond? 'A+ 'B-) false)
(check-expect (can-donate-to/cond? 'O+ 'B-) false)
(check-expect (can-donate-to/cond? 'O+ 'B+) true)

;; ****************************************************************
;; (can-donate-to/bool? donor recipient) Produces the result of the acceptablity for
;;   blood donation.
;; can-donate-to/bool?: Sym Sym -> Bool
;; Requires:
;;   Donor or recipient = O- O+ A- A+ B- B+ AB+ AB-
;; Examples:
(check-expect (can-donate-to/bool? 'O- 'AB+) true)
(check-expect (can-donate-to/bool? 'AB+ 'B-) false)


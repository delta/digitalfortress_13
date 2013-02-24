
;; The code is INCOMPLETE :D 
BITS 64
GLOBAL _start

SECTION .data
_start:
    jmp run
shell:
    db '/bin/shN'
run:
    xor rax, rax
    add rax,              
    add rdi, 
    add rsi,
    syscall
    xor rax, rax
    add rax, 59             
    lea rdi, [rel shell]    
    mov [rdi+7], byte ah    
    ;mov [rdi+5], byte ah
    xor rsi, rsi            
    xor rdx, rdx           
    syscall


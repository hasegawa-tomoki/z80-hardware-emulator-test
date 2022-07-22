Test program for Z80 hardware emulator  
https://github.com/hasegawa-tomoki/z80-hardware-emulator

# Requirements

zasm, asembler for the Zilog Z80 cpu.  
https://k1.spdns.de/Develop/Projects/zasm/Distributions/

# Usage

```
$ zasm prelim.z80
$ php rom2text.php|pbcopy
```

# Memo

```
$ z88dk-dis -o 0x100 prelim.rom > prelim.dis
```

# Forked from

https://github.com/superzazu/z80/tree/master/roms

# Thakns

@kaoriya
@hiromasa


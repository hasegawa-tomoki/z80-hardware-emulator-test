Test program for Z80 hardware emulator  
https://github.com/hasegawa-tomoki/z80-hardware-emulator

# prelim.z80

## Requirements

zasm, asembler for the Zilog Z80 cpu.  
https://k1.spdns.de/Develop/Projects/zasm/Distributions/

## Usage


```
$ zasm -uw prelim.z80
$ php bin2text.php prelim.rom|pbcopy
```

## Memo

```
$ z88dk-dis -o 0x100 prelim.rom > prelim.dis
```

# zexall.src

## Requirements

zmac Z-80 Macro Cross Assembler
http://48k.ca/zmac.html

## Usage

```
$ zmac.exe zexall.src
$ php bin2text.php zout/zexall.cim|pbcopy
```
or
```
$ zmac.exe zexdoc.src
$ php bin2text.php zout/zexdoc.cim|pbcopy
```

* 0x0006 should be changed to 0xff for z80-hardware-emulator

# Forked from

https://github.com/superzazu/z80/tree/master/roms

# Thakns

@kaoriya
@hiromasa


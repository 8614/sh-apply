
map <F4> Vy:<c-r>"<cr>
" 用gf可以跳转的配置文件 将上面一行写入
" $VIM/vimrc [gf]

"　命令模板
" ctags
!ctags -R 

" 全局替换
args **/*.php
argdo %s/getCities_sql/findProjectCities/egc | update

args **/*.php
argdo %s/nick_name/nickname/egc | update

" 全局搜搜
vimgrep /findAllNoOutdoorStations/ **/*.php

"""""""""""""""""""""　本项目常用开始　"""""""""""""""""""""""""""

vimgrep /ffmpeg/ **/*.php
vimgrep /addKefuChat/ **/*.php

vimgrep /last_chat_id/ **/*.php
vimgrep /findOrNewByObj/ **/*.php
vimgrep /findOrNewOpenidWeixinId/ **/*.php

vimgrep /findMpuserByVisitorId/ **/*.php


vimgrep /FROM_VISITOR/ **/*.php
vimgrep /getUserInfo/ **/*.php
vimgrep /addnum/ **/*.php

vimgrep /font.css/ **/*
vimgrep /黑体/ **/*.php
vimgrep /UNBOX_MAX/ **/*.php
vimgrep /nickname/ **/*.php

vimgrep /open_id/ **/*.php
vimgrep /OpenId/ **/*.php
vimgrep /openid/ **/*.php
vimgrep /Openid/ **/*.php

args **/*.php
argdo %s/OpenId/Openid/egc | update
argdo %s/open_id/openid/egc | update

"""""""""""""""""""""　本项目常用结束　"""""""""""""""""""""""""""

vimgrep /findAllNoOutdoorStations/ **/*.php


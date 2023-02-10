#!/usr/bin/env bash

# Team:布利啾啾迪布利多,NKU
# coding by 徐云凯 1713667
# 用于 Linux 定时任务自动运行爬虫刷新数据库

echo "time: " $(date +"%Y-%m-%d %H:%M:%S")
cd `dirname $0`; python3 covid_spider.py

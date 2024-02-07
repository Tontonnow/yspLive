import time
import mpv
from loguru import logger
logger.add("mpv.log", format="{time} {level} {message}", level="INFO", rotation="10 MB", retention="10 days", compression="zip")

def my_log(loglevel, component, message):
    if loglevel == "error":
        logger.error(f"{title} {message} {component}")


def play(title):
    player["stream-record"] = "./record/" + title + ".ts"
    player["user-agent"] = "cctv_app_tv"
    player["input-default-bindings"] = "yes"
    player["input-vo-keyboard"] = "yes"
    player["http-header-fields"] = "UID:42e4f5c90dc7f06a"
    url = f"http://localhost:800/cctv_ysp.php?channel={title}&uid=42e4f5c90dc7f06a"
    player.title = title
    player.play(url)
    time.sleep(20)
if __name__ == '__main__':
    player = mpv.MPV(ytdl=True, log_handler=my_log)
    datas = ["cctv1_10m", "cctv2_10m", "cctv3_10m", "cctv4_10m", "cctv5_10m", "cctv5p_10m", "cctv7_10m", "cctv8_10m",
             "cctv9_10m", "cctv10_10m", "cctv11_10m", "cctv12_10m", "cctv13_10m", "cctv14_10m", "cctv15_10m",
             "cctv16_10m", "cctv17_10m", "cgtnar_10m", "cgtndoc_10m", "cgtnen_10m", "cgtnfr_10m", "cgtnru_10m",
             "cgtnsp_10m", "cctv16_25m", "cctv4k_10m", "cctv4k10m", "cctv4k1610m", "cctv4k16_36m", "cctv4k_25m",
             "cctv4k_36m", "cctv8k_36m"]
    for title in datas:
        play(title)

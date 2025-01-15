import psutil,datetime


cpu_percent = psutil.cpu_percent()
system_memory = psutil.virtual_memory().used
timestamp = datetime.datetime.now() 
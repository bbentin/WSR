import psutil,datetime,mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    port=3307,
    password="venko",
)

cpu_percent = psutil.cpu_percent()
system_memory = psutil.virtual_memory().used /1024
timestamp = datetime.datetime.now() 
ip = psutil.net_if_addrs()["docker0"][0][1]

cursor = mydb.cursor()
sql = "INSERT INTO info_host.dados (cpu,memoria,data,ip) VALUES (%s,%s,%s,%s)"
val = (cpu_percent,system_memory,timestamp,ip)

cursor.execute(sql,val)

mydb.commit()
print()

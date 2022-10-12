# -*- coding: utf-8 -*-
"""
Created on Mon Apr 25 02:40:00 2022

@author: jm_vi
"""
import pymysql

miConexion = pymysql.connect( host='localhost', user= 'root', passwd='', db='mibaseerik' )
cur = miConexion.cursor()
cur.execute( "SELECT ci FROM persona" )
cur.execute("select avg(case when departamento='02' then Notafinal end) LP, "
            +"avg(case when departamento='03' then Notafinal end) CB, "
            +"avg(case when departamento='06' then Notafinal end) TR, "
            +"avg(case when departamento='05' then Notafinal end) PT,"
            +"avg(case when departamento='07' then Notafinal end) ST "
            +"from persona p, inscripcion i where i.ci=p.ci;")
for dep in cur.fetchall() :
    print ( dep)
miConexion.close()
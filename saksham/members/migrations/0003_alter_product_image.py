# Generated by Django 3.2.13 on 2022-08-20 18:07

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('members', '0002_auto_20220819_1637'),
    ]

    operations = [
        migrations.AlterField(
            model_name='product',
            name='image',
            field=models.ImageField(default='', upload_to='members/images'),
        ),
    ]
